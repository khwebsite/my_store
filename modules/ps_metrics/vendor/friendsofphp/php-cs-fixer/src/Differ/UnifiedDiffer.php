<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace ps_metrics_module_v4_0_5\PhpCsFixer\Differ;

use ps_metrics_module_v4_0_5\PhpCsFixer\Diff\Differ;
use ps_metrics_module_v4_0_5\PhpCsFixer\Diff\Output\StrictUnifiedDiffOutputBuilder;
use ps_metrics_module_v4_0_5\PhpCsFixer\Preg;
final class UnifiedDiffer implements DifferInterface
{
    /**
     * {@inheritdoc}
     */
    public function diff(string $old, string $new, ?\SplFileInfo $file = null) : string
    {
        if (null === $file) {
            $options = ['fromFile' => 'Original', 'toFile' => 'New'];
        } else {
            $filePath = $file->getRealPath();
            if (1 === Preg::match('/\\s/', $filePath)) {
                $filePath = '"' . $filePath . '"';
            }
            $options = ['fromFile' => $filePath, 'toFile' => $filePath];
        }
        $differ = new Differ(new StrictUnifiedDiffOutputBuilder($options));
        return $differ->diff($old, $new);
    }
}
