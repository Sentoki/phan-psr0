<?php declare(strict_types=1);

namespace petrovegor\PhanPsr0;

use Phan\Analysis;
use Phan\CodeBase;
use Phan\Language\Context;
use Phan\Language\Element\Clazz;
use Phan\Language\Element\Func;
use Phan\Language\Element\Method;
use Phan\Plugin;
use ast\Node;

class Psr0Plugin extends Plugin
{
    public function analyzeClass(
        CodeBase $code_base,
        Clazz $class
    ) {
        $break = true;
        $context = $class->getContext();
        $fileName = $context->getFile();
        $className = $class->getName();
        $fqsen = $class->getFQSEN();
        $aa = $fqsen->getNamespace();
        $bb = $fqsen->getName();
        $break = true;
        // TODO: Implement analyzeClass() method.
    }

    public function analyzeFunction(
        CodeBase $code_base,
        Func $function
    ) {
        $break = true;
        // TODO: Implement analyzeFunction() method.
    }

    public function analyzeMethod(
        CodeBase $code_base,
        Method $method
    ) {
        $break = true;
        // TODO: Implement analyzeMethod() method.
    }

    public function analyzeNode(
        CodeBase $code_base,
        Context $context,
        Node $node,
        Node $parent_node = null
    ) {
        $break = true;
        $file = $context->getFile();
        //$fqsen = $context->getClassFQSEN();
        $classInScope = $context->getClassInScope($code_base);
        $break = true;

    }
}

return new Psr0Plugin();
