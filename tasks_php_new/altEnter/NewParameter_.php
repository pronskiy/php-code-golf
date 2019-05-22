<?php

namespace Importer {

    use Importable\ImportMe;

    class Importer
    {
        /**
         * @var ImportMe
         */
        private $class;

        /**
         * Importer constructor.
         * @param ImportMe $class
         */
        public function __construct(ImportMe $class)
        {
            $this->class = $class;
        }
    }
}


namespace Importable {
    class ImportMe
    {

    }
}