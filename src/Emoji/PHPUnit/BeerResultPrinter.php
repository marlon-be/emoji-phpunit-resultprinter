<?php
namespace Emoji\PHPUnit;

class BeerResultPrinter extends ResultPrinter {

    /**
     * {@inheritdoc}
     */
    protected $errorEmoji = "\xf0\x9f\x98\xb2 "; // Astonished face

    /**
     * {@inheritdoc}
     */
    protected $failureEmoji = "\xf0\x9f\x98\xa1 "; // Pouting face

    /**
     * {@inheritdoc}
     */
    protected $incompleteEmoji = "\xf0\x9f\x98\xb6 "; // Face without mouth

    /**
     * {@inheritdoc}
     */
    protected $riskyEmoji = "\xf0\x9f\x98\xac "; // Grimacing Face

    /**
     * {@inheritdoc}
     */
    protected $skippedEmoji = "\xf0\x9f\x98\x91 "; // Expressionless face

    /**
     * {@inheritdoc}
     */
    protected $passEmoji = "\xF0\x9F\x8D\xBA "; // Smiling face with smiling eyes
}