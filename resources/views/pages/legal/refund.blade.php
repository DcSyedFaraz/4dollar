@extends('layouts.web')

@section('title', 'Refund Policy')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<div class="container mx-auto ">
    <div class="px-10 py-8">
        <h4 class=" text-2xl lg:text-4xl font-semibold  text-primary-one py-5 ">Refund Policy At $4 Essay
        </h4>

        <p class="page-p text-sm md:text-lg">
            We know how our customers’ money and time is important for them. First of all, we dedicatedly work to provide best work to our customers. Still if there is some lacking in the assignment we take some time for revision and do our best overcome the lacking in the assignment. At the end, seeing the reports and results still we couldn’t satisfy our customers so we go for our refund policy.
        </p>

            <h4 class=" text-2xl lg:text-4xl font-semibold  text-primary-one py-5 ">The Time Limits
            </h4>
            <p class="page-p text-sm md:text-lg">
                All the given below points are followed when the issue is addressed on time, that is within 7 days. However, customers while waiting for their results should share with us the correct result dates.
            </p>
            <h4 class=" text-2xl lg:text-4xl font-semibold  text-primary-one py-5 ">Refund Policy Followed By Given Rules

            </h4>
                <li class="text-sm md:text-lg">
                    If the assignment isn't matching the requirements.
            </li>
            <li class="text-sm md:text-lg">
                The quality isn’t matched.
             </li>
            <li class="text-sm md:text-lg">
                The assignment completed has more plagiarism than the university standards.
             </li>
             <li class="text-sm md:text-lg">
                We always ensure that our students never fail in any of the subject or get failing marks. But due to some reasons if it happens we do refund the 60% back, but for this authentic university report should be shared with $4 essay.

                 </li>
                 <li class="text-sm md:text-lg">
                    In case you shared the case to a third party earlier informing us about the matter, it will be considered as a breach of contract.
                     </li>

          </ul>
    </div>
</div>

@endsection
