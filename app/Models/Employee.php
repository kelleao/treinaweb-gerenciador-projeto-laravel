<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    /**
     * Defino o que vai ser permitido
     */
    protected $fillable = ['nome', 'cpf', 'data_contratacao', 'data_demissao'];

    /**
     * Define a relação com endereço
     *
     * @return void
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }

    /**
     * Define a relação com projetos
     *
     * @return void
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'employee_project', 'employee_id', 'project_id');
    }

    /**
     * Retornar os funcionários ativos
     *
     * @return void
     */
    static public function ativos()
    {
        return Employee::where('data_demissao', null)->get();
    }
}