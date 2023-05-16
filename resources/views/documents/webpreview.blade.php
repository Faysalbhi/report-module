<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>web preview</title>
  <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;

      }
      h3{
      text-align: center;
      text-decoration: underline
      }
      .success{
        background: #D6EEEE;
      }
      .table{
        width:100%;
      }
    </style>
</head>
<body>
   <h3>PROCUREMENT DEMAND FOR SR SEC, BBD OF FY 2023-2024</h3>
  <table class="table">
    <tr>
      <th rowspan="2">{{ __('Ser No') }}</th>
      <th rowspan="2">{{ __('Part No') }}</th>
      <th rowspan="2">{{ __('Name of Description') }}</th>
      <th rowspan="2">{{ __('Range Name') }}</th>
      <th colspan="3" rowspan="1">{{ __('Demand') }}</th>
      
      <th rowspan="2">{{ __('Qty Dmd') }}</th>
      <th rowspan="2">{{ __('Unit') }}</th>
      <th rowspan="2">{{ __('Recom by OPI Dte') }}</th>
      <th rowspan="2">{{ __('Estimated Unit Price (TK)') }}</th>
      <th rowspan="2">{{ __('Total Cost (TK)') }}</th>
      <th rowspan="2">{{ __('Justification') }}</th>
    </tr>
    <tr>
      <th>{{ __('Name of Justification User') }}</th>
      <th>{{ __('Present Holding in Base/Unit') }}</th>
      <th>{{ __('Present Holding in Sqn/Flt/Sec ') }}</th>
    </tr>
      <tr >
      <td><samp data-key="sl_no"><span></span></samp></td>
      <td><samp data-key="part_no"><span></span></samp></td>
      <td><samp data-key="description"><span></span></samp></td>
      <td><samp data-key="range"><span></span></samp></td>
      <td><samp data-key="name_justification_usr"><span></span></samp></td>
      <td><samp data-key="ph_base_unit"><span></span></samp></td>
      <td><samp data-key="ph_sqn_flt_sec"><span></span></samp></td>
      <td><samp data-key="qty_demand"><span></span></samp></td>
      <td><samp data-key="unit"><span></span></samp></td>
      <td><samp data-key="recom_opi_dte"><span></span></samp></td>
      <td><samp data-key="estimated_unit_price_tk"><span></span></samp></td>
      <td><samp data-key="total_cost_tk"><span></span></samp></td>
      <td><samp data-key="justification"><span></span></samp></td>
    </tr>
    
    
</table>
</body>
</html>