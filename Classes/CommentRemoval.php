<?php
declare(strict_types=1);

namespace StudioMitte\RemoveYoastComment;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Http\ApplicationType;

class CommentRemoval
{

    public function render(array &$params, $pObj): void
    {
        if (!($GLOBALS['TYPO3_REQUEST'] ?? null) instanceof ServerRequestInterface
            || !ApplicationType::fromRequest($GLOBALS['TYPO3_REQUEST'])->isFrontend()
        ) {
            return;
        }

        if (!isset($params['headerData']['StructuredDataManager'])) {
            return;
        }

        $params['headerData']['StructuredDataManager'] = str_replace('<!-- This site is optimized with the Yoast SEO for TYPO3 plugin - https://yoast.com/typo3-extensions-seo/ -->' . PHP_EOL, '', $params['headerData']['StructuredDataManager']);
    }
}
