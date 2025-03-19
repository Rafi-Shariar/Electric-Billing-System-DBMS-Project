


//Handle Login As
document.getElementById('LoginBtn').addEventListener('click', (e)=>{

    e.preventDefault();

    const loginAs = document.getElementById('loginas').value;
    console.log(loginAs);

    if(loginAs == 'User'){
        window.location.href = './Dashboards/User/UserDashboard.html';
    }
    else{
        window.location.href = './Dashboards/AdminDashboard.html';
    }
    
})