<?php

namespace Feature\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BlogPostCategoryResource;
use Tests\Feature\FeatureTest;

class BlogPostCategoryResourceTest extends FeatureTest
{
    public function test_list(): void
    {
        $user = $this->createAdminUser();
        $this->actingAs($user);

        $response = $this->get(BlogPostCategoryResource::getUrl('index', [], true, 'admin'))->assertSuccessful();

        $response->assertStatus(200);
    }
}