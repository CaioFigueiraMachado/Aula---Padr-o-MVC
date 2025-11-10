<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Produtos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }

        .alert {
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }

        .alert.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .actions {
            margin-bottom: 25px;
            text-align: right;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            transition: all 0.3s ease;
            margin-left: 10px;
        }

        .btn-primary {
            background-color: #3498db;
            color: white;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .btn-edit {
            background-color: #f39c12;
            color: white;
            padding: 6px 12px;
            font-size: 12px;
        }

        .btn-edit:hover {
            background-color: #e67e22;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
            padding: 6px 12px;
            font-size: 12px;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        .btn-cancel {
            background-color: #95a5a6;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #7f8c8d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        table th {
            background-color: #34495e;
            color: white;
            font-weight: bold;
            padding: 15px;
            text-align: left;
            border: none;
        }

        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #ecf0f1;
        }

        table tr:hover {
            background-color: #f8f9fa;
        }

        table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        table tr:nth-child(even):hover {
            background-color: #e9ecef;
        }

        .text-center {
            text-align: center;
        }

        .product-form {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #bdc3c7;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.3);
        }

        .form-actions {
            text-align: center;
            margin-top: 30px;
        }

        .form-actions .btn {
            margin: 0 10px;
            padding: 12px 25px;
        }

        td.actions {
            text-align: center;
            white-space: nowrap;
        }

        td.actions .btn {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">