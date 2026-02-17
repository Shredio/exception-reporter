<?php declare(strict_types = 1);

namespace Shredio\ExceptionReporter;

use Throwable;

interface ExceptionReporter
{

	public function report(Throwable $exception): void;

	/**
	 * @param non-empty-string $id can contain only letters, numbers, dots, dashes and underscores
	 */
	public function reportOnce(string $id, Throwable $exception): void;

}
