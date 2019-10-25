<?php

namespace App\Repositories\Interfaces;

interface TaskRepositoryInterface
{
    /**
     * @param $request
     */
    public function create($request);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * @return mixed
     */
    public function index();

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id);
}
