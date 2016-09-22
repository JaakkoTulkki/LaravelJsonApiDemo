<?php

namespace App\Tests\Integration;


use App\Topic;

class TopicsTest extends TestCase
{

    /**
     * Test the search route.
     */
    public function testSearch()
    {
        // ensure there is at least one person in the database
        $this->topic();

        $this->doSearch()
            ->assertSearchResponse();
    }

    public function testCreate()
    {
        $model = $this->topic(false);

        $data = [
            'type' => 'topics',
            'attributes' => [
                'topic_name' => $model->topic_name,
            ],
        ];

        $id = $this
            ->doCreate($data)
            ->assertCreateResponse($data);

//        $this->assertModelCreated($model, $id, ['first_name', 'surname']);
    }

    /**
     * Get the resource type that this test case is testing.
     *
     * @return string
     */
    protected function getResourceType()
    {
        return 'topics';
    }

    private function topic($create = true)
    {
        $builder = factory(Topic::class);
        return $create ? $builder->create() : $builder->make();
    }
}