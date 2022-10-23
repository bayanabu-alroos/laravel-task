<h2> Student ID: {{ $list->student_id }} <br /> Student Name: {{ $list->name }} </h2>
<h3> Subjects </h3>
@if ($list->subjects->count() > 0)
@foreach ($list->subjects as $subject)
<li>{{ $subject->subject_name }} </li>
@endforeach
@else
No subject is assigned for this student
@endif