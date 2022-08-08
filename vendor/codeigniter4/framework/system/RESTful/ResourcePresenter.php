<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\RESTful;

<<<<<<< HEAD
=======
use CodeIgniter\HTTP\Response;

>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
/**
 * An extendable controller to help provide a UI for a resource.
 */
class ResourcePresenter extends BaseResource
{
    /**
     * Present a view of resource objects
     *
<<<<<<< HEAD
     * @return mixed
=======
     * @return Response|string|void
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
     */
    public function index()
    {
        return lang('RESTful.notImplemented', ['index']);
    }

    /**
     * Present a view to present a specific resource object
     *
<<<<<<< HEAD
     * @param mixed $id
     *
     * @return mixed
=======
     * @param int|string|null $id
     *
     * @return Response|string|void
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
     */
    public function show($id = null)
    {
        return lang('RESTful.notImplemented', ['show']);
    }

    /**
     * Present a view to present a new single resource object
     *
<<<<<<< HEAD
     * @return mixed
=======
     * @return Response|string|void
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
     */
    public function new()
    {
        return lang('RESTful.notImplemented', ['new']);
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
<<<<<<< HEAD
     * @return mixed
=======
     * @return Response|string|void
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
     */
    public function create()
    {
        return lang('RESTful.notImplemented', ['create']);
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
<<<<<<< HEAD
     * @param mixed $id
     *
     * @return mixed
=======
     * @param int|string|null $id
     *
     * @return Response|string|void
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
     */
    public function edit($id = null)
    {
        return lang('RESTful.notImplemented', ['edit']);
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
<<<<<<< HEAD
     * @param mixed $id
     *
     * @return mixed
=======
     * @param int|string|null $id
     *
     * @return Response|string|void
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
     */
    public function update($id = null)
    {
        return lang('RESTful.notImplemented', ['update']);
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
<<<<<<< HEAD
     * @param mixed $id
     *
     * @return mixed
=======
     * @param int|string|null $id
     *
     * @return Response|string|void
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
     */
    public function remove($id = null)
    {
        return lang('RESTful.notImplemented', ['remove']);
    }

    /**
     * Process the deletion of a specific resource object
     *
<<<<<<< HEAD
     * @param mixed $id
     *
     * @return mixed
=======
     * @param int|string|null $id
     *
     * @return Response|string|void
>>>>>>> 45ec85920dadf24e2929c214f61a722d979624bc
     */
    public function delete($id = null)
    {
        return lang('RESTful.notImplemented', ['delete']);
    }
}
