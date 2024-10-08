## Authentication
Path: http://localhost:81/account/login
Method: POST
Body: {
    "Email": "gamew5177@gmail.com",
    "Password": "NazariKirilov_2004!"
}
Answer: {
    "email": "gamew5177@gmail.com",
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJmMTFmMjNkMS1iOTg3LTRlNzctOTNiMy0zNjQ1YzU1NTFiMDkiLCJlbWFpbCI6ImdhbWV3NTE3N0BnbWFpbC5jb20iLCJyb2xlIjoiQWRtaW4iLCJuYmYiOjE3Mjg0MTExMDMsImV4cCI6MTcyODQxMjkwMywiaWF0IjoxNzI4NDExMTAzLCJpc3MiOiJOYXphcmkiLCJhdWQiOiJDbGllbnQifQ.kMsqi5s50m5JxVrkHXA_FMXTJdin6QzH6WLGl6IkIzE"
}

Registration
Path: http://localhost:81/account/register
Method: POST
Body: {
  "name": "Назари",
  "surname": "Кирилов",
  "patronymic": "Андреевич",
  "email": "nazarikirilov@mail.com",
  "password": "NazariKirilov_2004?",
  "confirmPassword": "NazariKirilov_2004?"
}
Answer: Ok() (Просто ок 200, и ничего не возвращает)

ChangeRole
Path: http://localhost:81/account/management/change-role/{user_id}
Method: POST
Body: ["Admin", "Teacher"]
Answer: Ok() (Просто ок 200, и ничего не возвращает)