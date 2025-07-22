<?php

interface OperationAvancee
{
function virement(Compte $beneficiaire, int $somme): bool;
}