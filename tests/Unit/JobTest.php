<?php

use \App\Models\Job;
use \App\Models\Employer;




it('belongs to an employer', function () {
    // expect(true)->toBeFalse();
    ###
    // Arrange

    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);


    // Act & Assert
    expect($job->employer->is($employer))->toBeTrue();
    // Assert
});


it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('FrontEnd');

    expect($job->tags)->toHaveCount(1);
});
