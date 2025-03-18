document.getElementById('RegistratonBtn').addEventListener('click',(e)=>{
    e.preventDefault();

    

    document.getElementById('loginForm').classList.add('hidden');
    document.getElementById('registrationForm').classList.remove('hidden');

})


document.getElementById('createBtn').addEventListener('click',(e)=>{
    alert("Account Created Successfully")
})