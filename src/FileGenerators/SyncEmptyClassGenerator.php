<?php declare(strict_types=1);

namespace ApiClients\Tools\ResourceGenerator\FileGenerators;

use ApiClients\Tools\ResourceGenerator\FileGeneratorInterface;
use PhpParser\Node;

final class SyncEmptyClassGenerator extends AbstractEmptyExtendingClassGenerator implements FileGeneratorInterface
{
    const NAMESPACE = 'Sync';
}
