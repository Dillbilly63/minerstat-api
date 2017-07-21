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
  "RIG1":{  
    "general":{  
      "worker":"RIG1",
      "status":"online",
      "client":"claymore-eth",
      "uptime":"21 hours 5 minutes ",
      "uptime_sec":"75900",
      "crypto":"ETH",
      "crypto_dual":"",
      "pool":" eu1.ethermine.org:4444",
      "pool_dual":""
    },
    "hashrate":{  
      "hashrate":"149.253",
      "hashrate_unit":"MH",
      "hashrate_dual":"1321.126",
      "hashrate_dual_unit":"MH"
    },
    "shares":{  
      "accepted_share":"2918",
      "accepted_dual_share":"0",
      "rejected_share":"4",
      "rejected_dual_share":"0"
    },
    "revenue":{  
      "revenue_usd_day":"10.356",
      "revenue_usd_week":72.492,
      "revenue_usd_month":310.68,
      "revenue_btc_day":"0.004562",
      "revenue_btc_week":"0.031936",
      "revenue_btc_month":"0.136870"
    },
    "gpuinfo":{  
      "gpu_count":"6",
      "gpu1":"58",
      "gpu2":"57",
      "gpu3":"58",
      "gpu4":"59",
      "gpu5":"58",
      "gpu6":"58",
      "gpu7":"",
      "gpu8":"",
      "fan1":"0",
      "fan2":"0",
      "fan3":"67",
      "fan4":"72",
      "fan5":"0",
      "fan6":"0",
      "fan7":"",
      "fan8":""
    }
  },
  "global":{  
    "total_gpu":"25",
    "total_worker":"4",
    "total_online_worker":"4"
  },
  "list":["B1_1060","B2_1060","rig1","Rig2_1060"]
}
</pre>

Current API Rules: 6 request's / 1 IP / 1 minute

Idea & Request & Bug Report: api@minerstat.com

© minerstat.com
