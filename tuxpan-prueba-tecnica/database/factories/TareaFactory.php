<?php

namespace Database\Factories;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{

    protected $model = Tarea::class;

    public function definition(): array
    {
    
        return [
            'nombre' => $this->faker->sentence,
            'descripcion' => $this->faker->paragraph,
            'fecha_vencimiento' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'estado' => $this->faker->randomElement(['pendiente', 'en_progreso', 'finalizada']),
            'user_id' => $this->faker->numberBetween(1, 3), // Cambiar según la cantidad de usuarios
        ];
        
    }
}
