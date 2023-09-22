import { Head } from "@inertiajs/react";
import AdminLayout from "../Layout/AdminLayout";

import React from 'react'

export default function Welcome() {
  return (
    <>
      <Head>
        <meta name="name" content="Hack A Salmon" />
        <meta name="keywords" content="Hack, Salmon, Hackathon" />
        <meta name="description" content="Hack A Salmon!" />
        <meta name="image" content="https://hackasalmon.online/favicon.ico" />
      </Head>
      <AdminLayout>
        Tes
      </AdminLayout>
    </>
  )
}
