<?php
 trait tAtomicOperationStateFile {use tUmiConfigInjector;protected function getFilePath(iAtomicOperation $vd420e30b52627bc1c3f4863735eae8ef) {$vc903f19c29cf7b2f1424ae02e30db3a1 = $this->getConfiguration()    ->includeParam('sys-temp-path');$v6f66e878c62db60568a3487869695820 = trimNameSpace(get_class($vd420e30b52627bc1c3f4863735eae8ef));$vb068931cc450442b63f5b3d276ea4297 = trimNameSpace($vd420e30b52627bc1c3f4863735eae8ef->getName());return $vc903f19c29cf7b2f1424ae02e30db3a1 . '/manifest/' . $v6f66e878c62db60568a3487869695820 . '_' . $vb068931cc450442b63f5b3d276ea4297;}}