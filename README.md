# minerstat.com API
PHP, C#, C++, NodeJS

<b>Public API</b>

- Worker Statistics
- Revenue
- Online Status

<b>Private API (Soon)</b>

- Reboot, Restart
- Remote Commands

# Public JSON

https://minerstat.com/api/getstat/<b>ACCESSKEY</b>

Response:

<pre>
[  
  {  
    "total_online_worker":"4"
  },
  {  
    "total_worker":"4"
  },
  {  
    "total_gpu":"25"
  },
  {  
    "worker":"RIG1",
    "status":"online",
    "client":"claymore-eth",
    "crypto":"EXP",
    "crypto_dual":"SC",
    "hashrate":"164.315",
    "hashrate_unit":"MH",
    "hashrate_dual":"1314.536",
    "hashrate_dual_unit":"MH",
    "accepted_share":"4559",
    "accepted_dual_share":"517",
    "rejected_share":"1",
    "rejected_dual_share":"0",
    "gpu1":"58",
    "gpu2":"67",
    "gpu3":"61",
    "gpu4":"65",
    "gpu5":"59",
    "gpu6":"66",
    "gpu7":"",
    "gpu8":"",
    "fan1":"72",
    "fan2":"72",
    "fan3":"72",
    "fan4":"71",
    "fan5":"70",
    "fan6":"71",
    "fan7":"",
    "fan8":"",
    "revenue_day":"38.8251",
    "revenue_week":271.7757,
    "revenue_month":1164.753
  },
 ...........
]
</pre>

Current API Rules: 2 request / 1 IP / 1 sec

© minerstat.com
