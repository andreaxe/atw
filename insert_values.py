import random
import names
import string
from datetime import datetime
from names_helper import generate_nouns, generate_cities, generate_categoria


def get_one_random_domain(domains):
    return random.choice(domains)


def get_one_random_name(letters):
    return ''.join(random.choice(letters) for i in range(7))


def generate_random_emails():
    return [get_one_random_name(letters) + '@' + get_one_random_domain(domains) for i in range(max)]


def id_generator(size=6, chars=string.ascii_uppercase + string.digits):
    return ''.join(random.choice(chars) for _ in range(size))


if __name__ == '__main__':

    # Gerar utilizadores
    max = 100
    letters = string.ascii_lowercase[:12]
    domains = ["hotmail.com", "gmail.com", "aol.com", "mail.com", "mail.kz", "yahoo.com"]
    emails = generate_random_emails()
    categoria = generate_categoria()

    user = []
    eventos = []
    local = generate_cities()
    prova = []

    for x in range(0, max):
        year = random.choice(range(1950, 2001))
        month = random.choice(range(1, 13))
        day = random.choice(range(1, 29))
        birth_date = datetime(year, month, day).strftime("%m/%d/%Y")
        name = names.get_full_name()
        nif = random.randint(200000000, 299999999)
        cc = random.randint(10000000, 19999999)
        telef = random.randint(35191000000, 351919999999)

        user_string = "INSERT INTO utilizador (nome, nif, cc, datan, email, telef, senha) " \
                      "VALUES ('{}', '{}', '{}', '{}', '{}', '{}', '{}');"\
            .format(str(name), str(nif), str(cc), birth_date, emails[x], telef, id_generator())
        #, morada, nacionalidade, genero, tempos, tamanho, ativo, federado

        nouns = generate_nouns()
        designacao = (" ".join([nouns[random.randrange(0, len(nouns))] for i in range(3)]))

        evento_date = datetime(random.choice(range(2018, 2019)), month, day).strftime("%m/%d/%Y")
        evento_string = "INSERT INTO evento (designacao, local, coordenadas, categoria, dataevento, ativo) " \
                  "VALUES ('{}', '{}', '{}', '{}', '{}', 1)".format(designacao, random.choice(local), '-8, 45.8',
                                                                    random.choice(categoria), evento_date, 1)

        eventos.append(evento_string)
        user.append(user_string)

    for query in user:
        print(query)

    for query in eventos:
        print(query)

    #


