<h3> Form for registr </h3>
<form action="/register/create" method="post">
    <p>
        <label for="first_name"> First name: </label>
        <input id="first_name" type='text' name="first_name" required>  
    </p>
    
    <p> 
        <label for="last_name"> Last name: </label>
        <input id="last_name" type='text' name="last_name" required>  
    </p>
    
    
    <p> 
        <label for="number_group"> Number group: </label>
        <input id="number_group" type='text' name="number_group" required>  
    </p>
    
    <p>
        <label for="sex"> Male </label>
        <input id="sex" name="sex" value="male" type="radio" checked>

        <label for="sex"> Female </label>
        <input id="sex" name="sex" value="female" type="radio">
    </p>

    <p>
        <label for="email"> Email: </label>
        <input type='email' name="email" id="email" required>
    </p>

   <p> 
        <label for="ball"> Ball EGE: </label>
        <input type='number' name="ball" id="ball" min="100" max="277" required>
    </p>

    <p>
        <label for="birthday"> Birthday </label>
        <input type="date" id="birthday" name="birthday" required>
    </p>

    <input type='submit' value='Submit'>
</form>
