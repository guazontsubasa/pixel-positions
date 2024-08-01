<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    //AAA = Arrange, Act, Assert
    
    //arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);
    
    //act & assert
    expect($job->employer->is($employer))->toBeTrue();
    
});

it('can have tags', function () {
    //AAA = Arrange, Act, Assert
    
    //arrange
    $job = Job::factory()->create();
    
    //act
    $job->tag('Frontend');
    
    //assert
    expect($job->tags)->toHaveCount(1);
    
});