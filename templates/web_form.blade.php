<form action="" method="">
    <h2>Create a New Ninja</h2>

    <!-- Ninja name -->
    <lable for="name">Ninja Name:</lable>
    <input type="text" id="name" required>

    <!-- ninja strength -->
    <label for="skill">Ninja Skill (0-100)</label>
    <input type="number" id="skill" required>

    <!-- ninja bio -->
    <label for="bio">Biography:</label>
    <textarea rows="5" id="bio" name="bio" required></textarea>

    <!-- select dojo -->
    <label for="dojo_id">Dojo:</label>
    <select name="dojo_id" id="dojo_id" required>
        <option value="" disable selected>Select a dojo</option>
    </select>
    <!-- button to submit a form -->
    <button type="submit" class="btn mt-4">Createe Ninja</button>

    <!-- validation errors -->
</form>