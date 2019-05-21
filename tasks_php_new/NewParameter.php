<?php

namespace Importer {
    class Importer
    {
        public function __construct(\Importable\/*caret*/ImportMe $class)
        {
        }
    }
}


namespace Importable {
    class ImportMe
    {

    }
}