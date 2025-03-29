<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\Interfaces\IntervalRepositoryInterface;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class IntervalsList extends Command
{

    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'intervals:list {--left=} {--right=}';

    /**
     * Description
     * @var string
     */
    protected $description = 'Пересечение интервалов';

    /**
     * Validation rules
     * @var array|array[]
     */
    protected array $optionRules = [
        'left' => ['required', 'integer'],
        'right' => ['required', 'integer']
    ];

    /**
     * Cache lifetime in seconds
     * @var int
     */
    private int $cacheLifeTime = 600;

    /**
     * Cache key
     * @var string
     */
    private string $cacheKey = 'intervalIntersections';


    /**
     *  IntervalRepository
     * @var IntervalRepositoryInterface
     */
    private IntervalRepositoryInterface $intervalRepository;


    /**
     * Constructor
     * @param IntervalRepositoryInterface $intervalRepository
     */
    public function __construct(IntervalRepositoryInterface $intervalRepository)
    {
        parent::__construct();
        $this->intervalRepository = $intervalRepository;
    }

    /**
     * Validation
     * @param array $options
     * @param array $rules
     * @return array|null
     * @throws ValidationException
     */
    protected function validate(array $options = [], array $rules = []): array|null
    {
        $validator = Validator::make($options, $rules);

        if ($validator->fails()) {
            $this->error('Ошибка! Параметры заданы неверно.');

            collect($validator->errors()->all())
                ->each(fn ($error) => $this->line($error));
            return null;
        }

        return $validator->validated();
    }

    /**
     * Execute the console command.
     * @return int
     * @throws ValidationException
     */
    public function handle(): int
    {
        $validated = $this->validate($this->options(), $this->optionRules);

        if (!$validated) {
            return 1;
        }

        $res = Cache::remember($this->cacheKey, $this->cacheLifeTime, function () use ($validated) {
            return $this->intervalRepository->getIntersections($validated['left'], $validated['right']);
        });

        $headers = ['id', 'start', 'end'];
        $this->table($headers, $res);

        return 0;
    }
}
