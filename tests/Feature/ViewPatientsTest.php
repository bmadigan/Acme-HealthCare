<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewPatientsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_doctor_can_view_a_list_of_patients()
    {
        //$this->withoutExceptionHandling();
        $doctor = factory(User::class)->create();
        $this->signIn($doctor);

        // Create 5 patients for this doctor
        $patients = factory(Patient::class, 5)->create(['user_id' => $doctor->id]);

        $response = $this->get('/patients');
        $response->assertStatus(200);
        $this->assertCount(5, $patients);
    }

    /** @test */
    public function a_doctor_can_view_a_single_patient()
    {
        $doctor = factory(User::class)->create();
        $this->signIn($doctor);

        // Create patient for this doctor
        $patient = factory(Patient::class)->create(['user_id' => $doctor->id]);
        $patient->fresh();

        $response = $this->get('/patients/' . $patient->id);
        $response->assertStatus(200);
    }

    /** @test */
    public function a_doctor_cannot_view_a_patient_from_other_doctors()
    {
        $doctor = factory(User::class)->create();
        $this->signIn($doctor);

        // Create patient for a different doctor
        $patient = factory(Patient::class)->create(['user_id' => 9999]);
        $patient->fresh();

        $response = $this->get('/patients/' . $patient);
        $response->assertStatus(404);
    }
}
