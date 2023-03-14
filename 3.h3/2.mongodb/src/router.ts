'use strict'

// Import routes.
import index from '@/routes/index'
import users from '@/routes/users/index'
import userById from '@/routes/users/id'
import userCreate from '@/routes/users/create'
import userUpdate from '@/routes/users/update'
import userDelete from '@/routes/users/delete'

const router = createRouter()
  .get(
    '/',
    index
  )
  .get(
    '/hello/:name',
    eventHandler((event) => `Hello ${event.context.params.name}!`)
  )
  .get(
    '/users',
    users
  )
  .get(
    '/users/:id',
    userById
  )
  .post(
    '/users/create',
    userCreate
  )
  .put(
    '/users/update/:id',
    userUpdate
  )
  .delete(
    '/users/delete/:id',
    userDelete
  )

export default router