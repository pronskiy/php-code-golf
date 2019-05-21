<?php

namespace CurrentNamespace {

    use FancyNamespaceWithTooManySymbolsInName\ClassINeed;

    new ClassINeed;
}

namespace FancyNamespaceWithTooManySymbolsInName {
    class ClassINeed
    {
    }
}