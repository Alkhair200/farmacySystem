<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'contractUserID',
        'contractDuration',
        'contractByHour',
        'contractByMonth',
        'contractSalaryByHour',
        'contractSalaryByMonth',
        'contractPermittedMin',
        'contractAfterFifteenMin',
        'contractAllDayMin',
        'contractOveTimeByHour',
        'contractCommession',
        'contractInsurances',
        'contractInsurancesNum',
        'contractInsurancesPercent',
        'contracInsurancesTotal',
        'contractInsurancesJob',
        'contractInsurancesUser',
        'contractVacations',
        'contractArda',
        'contractVacationsEjaEtiady',
        'contractVacationsEjaNew',
        'contractNotes',
    ];
}
