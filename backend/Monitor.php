<?php

class Monitor{
    private $id;
    private $namaKegiatan;
    private $pjMonitor;
    private $status;
    private $deadline;
    private $deskripsi;

    private function createPjMonitor(PjMonitor $pjMonitor): void
    {
        $query = "INSERT INTO pj_monitors VALUES('', '$pjMonitor->monitors_id', $pjMonitor->users_id)";
        mysqli_query(Connection::getConnection(),$query);
    }
    private function getPjMonitor($monitorId): array
    {
        $pjMonitors = array();
        $query = "SELECT * FROM pj_monitors WHERE monitors_id='$monitorId'";
        $pjMonitors_query_result = mysqli_query(Connection::getConnection(),$query);
        while($pjMonitor = mysqli_fetch_assoc($pjMonitors_query_result)){
            $pjMonitors[] = $pjMonitor;
        }

        return $pjMonitors;
    }
    public function getAll(): array
    {
        $monitors = array();
        $query = "SELECT * FROM monitors";
        $monitors_query_result = mysqli_query(Connection::getConnection(),$query);
        while($monitor = mysqli_fetch_assoc($monitors_query_result)){
            $monitor['pj_monitor'] = $this->getPjMonitor($monitor['id']);
            $monitors[] = $monitor;
        }

        return $monitors;
    }
    public function getById($id): array
    {
        $query = "SELECT * FROM monitors WHERE id='$id' LIMIT 1";
        $monitor_query_result = mysqli_query(Connection::getConnection(),$query);
        $monitor = mysqli_fetch_assoc($monitor_query_result);
        $monitor['pj_monitor'] = $this->getPjMonitor($monitor['id']);

        return $monitor;
    }
    public function create(Monitor $monitor): void
    {
        $query = "INSERT INTO monitors VALUES('', '$monitor->namaKegiatan', '$monitor->status', '$monitor->deadline', '$monitor->status', '$monitor->deskripsi')";
        mysqli_query(Connection::getConnection(),$query);
        $monitor->id = mysqli_insert_id(Connection::getConnection());

        foreach($monitor->pjMonitor as $pj){
            $pjMonitor = new PjMonitor();
            $pjMonitor->monitors_id = $monitor->id;
            $pjMonitor->users_id = $pj[1];
            $monitor->createPjMonitor($pjMonitor);
        }

        header('Location: ');
    }
    public function update(Monitor $monitor, $id): void
    {
        $query = "UPDATE monitors SET nama_kegiatan = '$monitor->namaKegiatan', status = '$monitor->status', deadline = '$monitor->deadline', status = '$monitor->status', deskripsi = '$monitor->deskripsi' WHERE id = '$id'";
        mysqli_query(Connection::getConnection(),$query);

        header('Location: ');
    }
    public function delete($id): void
    {
        $query = "DELETE FROM monitors WHERE id = '$id'";
        mysqli_query(Connection::getConnection(),$query);

        header('Location: ');
    }
}