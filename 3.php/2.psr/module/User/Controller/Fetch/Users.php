<?php
namespace Spectre\User\Controller\Fetch;

// Import local packages:
use Spectre\User\Controller\Controller;

// GET http://0.0.0.0:8181/users
class Users extends Controller
{
    public function fetch()
    {
        // Columns to select.
        $columns = [
            'uuid',
            'name',
            'slug',
            'created_on',
            'updated_on',
        ];

        // Get user(s).
        // https://medoo.in/api/select
        return $this->database->select('user', $columns);
    }
}
