{{-- ALL --}}

<section>
    <h1 class="text-center">Vous êtes sur la page Home</h1>
    <a href={{ route('home') }}>Home</a>
    <a href={{ route('student.create') }}>Formulaire</a>
    <h2>Tout les étudiants</h2>
    @foreach ($students as $student)
        <div class="@if ($student->age > 24) purple text-white @elseif($student->age === 22 or $student->age === 23) bg-primary text-white @endif">
            <span><strong>Nom: </strong>{{ $student->name }}</span>
            <span><strong>Genre: </strong>{{ $student->genre }}</span>
            <span><strong>Age: </strong>{{ $student->age }}</span>
            <span><strong>Email: </strong>{{ $student->email }}</span>
        </div>
    @endforeach
</section>

{{-- Garcons --}}

<section>
    <h2>Tout les garçons</h2>
    @foreach ($students as $student)
        @if ($student->genre === 'homme' or $student->genre === 'Homme')
            <div class="@if ($student->age > 24) purple text-white @elseif($student->age === 22 or $student->age === 23) bg-primary text-white @endif">
                <span><strong>Nom: </strong>{{ $student->name }}</span>
                <span><strong>Genre: </strong>{{ $student->genre }}</span>
                <span><strong>Age: </strong>{{ $student->age }}</span>
                <span><strong>Email: </strong>{{ $student->email }}</span>
            </div>
        @endif
    @endforeach
</section>

{{-- Filles --}}

<section>
    <h2>Toutes les filles</h2>
    @foreach ($students as $student)
        @if ($student->genre === 'Femme' or $student->genre === 'femme')
            <div class="@if ($student->age > 24) purple text-white @elseif($student->age === 22 or $student->age === 23) bg-primary text-white @endif">
                <span><strong>Nom: </strong>{{ $student->name }}</span>
                <span><strong>Genre: </strong>{{ $student->genre }}</span>
                <span><strong>Age: </strong>{{ $student->age }}</span>
                <span><strong>Email: </strong>{{ $student->email }}</span>
            </div>
        @endif
    @endforeach
</section>
