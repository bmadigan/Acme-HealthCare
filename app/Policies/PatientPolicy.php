<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Patient;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the patient.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Patient  $patient
     * @return mixed
     */
    public function view(User $user, Patient $patient)
    {
        return $patient->user_id == $user->id;
    }

    /**
     * Determine whether the user can update the patient.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Patient  $patient
     * @return mixed
     */
    public function update(User $user, Patient $patient)
    {
        return $patient->user_id == $user->id;
    }

    /**
     * Determine whether the user can delete the patient.
     *
     * @param  \App\User  $user
     * @param  \App\Patient  $patient
     * @return mixed
     */
    public function delete(User $user, Patient $patient)
    {
        return $patient->user_id == $user->id;
    }
}
