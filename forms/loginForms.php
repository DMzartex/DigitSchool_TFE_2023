<form method="post" action="">
    <h2>Se connecter</h2>
    <div class="champEmail">
        <label for="mail" class="form-label">Email</label>
        <input type="text" class="form-control" id="mail" name="mailLogin">
    </div>
    <div class="champPassword">
        <label for="Password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="Password" name="passLogin">
    </div>

    <div class="champSelect">
        <select class="form-select" name="role" aria-label="Default select example">
            <option selected value="none">Choisissez un rôle :</option>
            <option value="teacher">Enseignant</option>
            <option value="student">Etudiant</option>
            <option value="educator">Éducateur</option>
            <option value="parent">Parent</option>
            <option value="secretary">Service administratif</option>
        </select>
    </div>

    <div class="buttonConnect">
        <button type="submit" name="login" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Cyan to Blue</button>
    </div>
</form>