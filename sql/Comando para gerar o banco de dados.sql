-- Cria o banco de dados se não existir
CREATE DATABASE IF NOT EXISTS suporte_db;
USE suporte_db;

-- Cria a tabela de chamados
CREATE TABLE IF NOT EXISTS chamados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    setor_trabalho VARCHAR(100) NOT NULL,
    ramal_telefone VARCHAR(50) NOT NULL,
    descricao_problema TEXT NOT NULL,
    status_chamado ENUM('Aberto', 'Em Atendimento', 'Resolvido') DEFAULT 'Aberto',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);