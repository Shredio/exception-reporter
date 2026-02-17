<?php declare(strict_types = 1);

namespace Shredio\ExceptionReporter;

use Throwable;

final readonly class ThrowExceptionReporter implements ExceptionReporter
{

	public function report(Throwable $exception): void
	{
		throw $exception;
	}

	public function reportOnce(string $id, Throwable $exception): void
	{
		throw $exception;
	}

}
