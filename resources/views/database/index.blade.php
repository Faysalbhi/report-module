<x-layouts.master>
  @php
    $databaseName;
  @endphp
  <x-baf.database title="My Databases" :databaseName=$databaseName/>
</x-layouts.master>