
---

## Installation & Run

### Backend
1. `cd backend`
2. `composer install`
3. Copy `.env` from `.env.example` and configure DB
4. `php artisan key:generate`
5. `php artisan migrate`
6. `php artisan serve` (runs at `http://127.0.0.1:8000`)

### Frontend
1. `cd frontend`
2. `npm install`
3. `npm start` (runs at `http://localhost:3000`)

---

## API Endpoints
| Method | Endpoint      | Description                 |
|--------|---------------|-----------------------------|
| POST   | /api/contact  | Submit a new contact message|

---

## Notes
- Make sure CORS is properly configured in `backend/config/cors.php`
- Ensure database connection is correct in `.env`
- Frontend sends POST requests to `http://127.0.0.1:8000/api/contact`
