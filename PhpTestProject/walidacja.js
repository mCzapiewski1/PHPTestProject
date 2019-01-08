function validateForm() 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(forma.email.value))
  {
    return (true)
  }else{
    alert("Niepoprawny adres email - przyklad adres@adres.com")
    return (false)
  }
}

  

