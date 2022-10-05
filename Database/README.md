## For querying action items in past 30 days for specific customer ID (ex. 05)
```
SELECT * FROM customer_action 
WHERE customer_id = 05 
GROUP BY customer_id 
HAVING action_details >= DATEADD(day, -30, getdate());
```

## List of all actions from yesterday to today
```
SELECT * FROM customer_action WHERE created_time_utc = DATE_SUB(CURRENT_DATE(),INTERVAL 1 DAY);
```