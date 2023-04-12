input_text = ''''''

text = '''INSERT INTO `universities` (`id`, `full_info`, `type`, `profession_id`, `created_at`, `updated_at`) VALUES '''
query = '''(NULL, 'new line', '1', '5', '2023-04-03 02:11:41', '2023-04-03 02:11:41'), '''

lines = input_text.split('\n')

formatted_lines = text

for line in lines:
    formatted_lines += query.replace('new line', line)

print(formatted_lines)