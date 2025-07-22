<?php

interface OperationSimple{
     function crediter(int $somme):void;
     function debiter(int $somme):bool;
}