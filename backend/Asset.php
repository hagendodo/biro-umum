<?php

class Asset{
    private $id;
    private $kodeBarang;
    private $namaBarang;
    private $jumlah;
    private $status;
    private $pjAsset;

    private function createPjAsset(PjAsset $pjAsset): void
    {
        $query = "INSERT INTO pj_assets VALUES('', '$pjAsset->assets_id', $pjAsset->users_id)";
        mysqli_query(Connection::getConnection(),$query);
    }

    private function getPjAsset($assetId): array
    {
        $pjAssets = array();
        $query = "SELECT * FROM pj_assets WHERE assets_id='$assetId'";
        $pjAssets_query_result = mysqli_query(Connection::getConnection(),$query);
        while($pjAsset = mysqli_fetch_assoc($pjAssets_query_result)){
            $pjAssets[] = $pjAsset;
        }

        return $pjAssets;
    }

    public function getAll(): array
    {
        $assets = array();
        $query = "SELECT * FROM assets";
        $assets_query_result = mysqli_query(Connection::getConnection(),$query);
        while($asset = mysqli_fetch_assoc($assets_query_result)){
            $asset['pj_asset'] = $this->getPjAsset($asset['id']);
            $assets[] = $asset;
        }

        return $assets;
    }

    public function getById($id): array
    {
        $query = "SELECT * FROM assets WHERE id='$id' LIMIT 1";
        $asset_query_result = mysqli_query(Connection::getConnection(),$query);
        $asset = mysqli_fetch_assoc($asset_query_result);
        $asset['pj_asset'] = $this->getPjAsset($asset['id']);

        return $asset;
    }

    public function create(Asset $asset): void
    {
        $query = "INSERT INTO assets VALUES('', '$asset->kodeBarang', '$asset->namaBarang', '$asset->jumlah', '$asset->status')";
        mysqli_query(Connection::getConnection(),$query);
        $asset->id = mysqli_insert_id(Connection::getConnection());

        foreach($asset->pjAsset as $pj){
            $pjAsset = new PjAsset();
            $pjAsset->assets_id = $asset->id;
            $pjAsset->users_id = $pj[1];
            $asset->createPjAsset($pjAsset);
        }

        header('Location: ');
    }

    public function update(Asset $asset, $id): void
    {
        $query = "UPDATE assets SET kode_barang = '$asset->kodeBarang', nama_barang = '$asset->namaBarang', jumlah = '$asset->jumlah', status = '$asset->status WHERE id = '$id'";
        mysqli_query(Connection::getConnection(),$query);

        header('Location: ');
    }

    public function delete($id): void
    {
        $query = "DELETE FROM assets WHERE id = '$id'";
        mysqli_query(Connection::getConnection(),$query);

        header('Location: ');
    }
}
