<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCoba3()
    {
        $file = storage_path('app/public/test/test.csv');

        $csvToRead = fopen($file, 'r');

        while (!feof($csvToRead)) {
            $csvArray[] = fgetcsv($csvToRead, 1000, ',');
        }

        fclose($csvToRead);

        Log::info(json_encode($csvArray, JSON_PRETTY_PRINT));

        $csv = Collection::make($csvArray);

        $csv->map(function ($item) {
            User::query()->create([
                'name' => $item[1],
                'password' => 'joko',
                'username' => $item[0],
                'role_id' => User::STUDENT,
                'class' => $item[2]
            ]);
        });

        $user = User::query()->where('name', 'AKmal');
        self::assertNotNull($user);
    }

    public function testCoba4()
    {
        Log::info(route('admin.users.csv-store'));
    }


}
