<section>
    <h1 class="text-center">Formulaire</h1>
    <a href={{ route('home') }}>Home</a>
    <a href={{ route('student.create') }}>Formulaire</a>
    <form action={{ route('student.store') }} method='POST'>
        @csrf
        <div>
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="genre">Genre:</label>
            <input type="text" name="genre" id="genre">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <input type="submit" value="Envoie ton étudiant">
    </form>
</section>