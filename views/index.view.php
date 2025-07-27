 <?php require ('partials/head.php') ?>  

<?php require ('partials/banner.php') ?>  
<style>

    button {
     padding: 15px 15px;
        font-size: 30px;
        background-color:  #BB4A47;
        color: white;
        border-radius: 20px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 300px;
        font-family: "Edu NSW ACT Cursive", cursive;
        font-optical-sizing: auto;
        font-style: normal;
        box-shadow: rgba(195, 157, 132, 0.8) -10px 10px;
        border: 2px solid black; 
     
}

button:hover {
    background-color: #b10c06ff;
   
}

main {
     font-family: "Edu NSW ACT Cursive", cursive;
      color: #b10c06ff;
}
</style>
        <main>
            <center>
            <div>
            
                <h2 style="font-size:40px;"> Rules:</h2>
                 </center>
                <h3 style="margin-left: 15rem; margin-right: 15rem; ">
                  -Guess the word based on the theme. <br>

-Type your answer and click the Answer button for feedback.<br>

-"Too short" = answer is too short. "Too long" = answer is too long. "Try again" = correct length, wrong word. <br>

-Use lowercase letters with spaces between words only. <br>

-Hints are in the top-right corner (no penalty). <br>

-Create an account to save your progress. (Won't work otherwise) <br>

-Track completed levels, number of guesses, and dates. <br>

-Completing a level unlocks the next. <br>

-Good luck and have fun!

                </h3>
                <center>
               <button onclick="playAgain()">Start Here</button> &nbsp;
&nbsp;
                <button onclick="User()">Account</button>
               <br>
                <br>
                 <br>
            </div>
            </center>
        </main>

        <script>
            function playAgain() {
      window.location.href = "/notes";
    }

     function User() {
      window.location.href = "/users";
    }
        </script>
        <?php require ('partials/footer.php') ?>




