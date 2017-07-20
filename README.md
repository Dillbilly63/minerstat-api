# minerstat.com JSON API

<b>Public API</b>

- Worker Statistics
- Revenue
- Online Status

<b>Private API (Soon)</b>

- Reboot, Restart
- Remote Commands

# Public JSON

https://minerstat.com/api/v2/getstat/<b>ACCESSKEY</b>

Response:

<pre>
{  
  "B1_1060":{  
    "worker":"B1_1060",
    "status":"online",
    "client":"claymore-eth",
    "uptime":"1 days 17 hours 14 minutes ",
    "uptime_sec":"148440",
    "crypto":"ETH",
    "crypto_dual":"SC",
    "hashrate":"131.955",
    "hashrate_unit":"MH",
    "hashrate_dual":"1319.567",
    "hashrate_dual_unit":"MH",
    "accepted_share":"4968",
    "accepted_dual_share":"1285",
    "rejected_share":"2",
    "rejected_dual_share":"0",
    "pool":" eu1.ethermine.org:4444",
    "pool_dual":"sia-eu1.nanopool.org:7777",
    "revenue":{  
      "revenue_usd_day":"9.6304",
      "revenue_usd_week":67.4128,
      "revenue_usd_month":288.912,
      "revenue_btc_day":"0.004218",
      "revenue_btc_week":"0.029527",
      "revenue_btc_month":"0.126545"
    },
    "gpuinfo":{  
      "gpu_count":"6",
      "gpu1":"60",
      "gpu2":"67",
      "gpu3":"68",
      "gpu4":"68",
      "gpu5":"64",
      "gpu6":"51",
      "gpu7":"",
      "gpu8":"",
      "fan1":"91",
      "fan2":"91",
      "fan3":"91",
      "fan4":"91",
      "fan5":"91",
      "fan6":"91",
      "fan7":"",
      "fan8":""
    }
  },
    "global":{  
    "total_gpu":"25",
    "total_worker":"4",
    "total_online_worker":"4"
  }
}
]
</pre>

Current API Rules: 2 request / 1 IP / 1 sec

Idea & Request & Bug Report: api@minerstat.com

© minerstat.com
